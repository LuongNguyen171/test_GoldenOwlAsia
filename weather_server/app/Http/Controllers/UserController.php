<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function updateUserInfo(Request $request)
    {
        try {
            $user = $request->user();

            $user->userAddress = $request->input('userAddress');
            $user->userPhoneNumber = $request->input('userPhoneNumber');
            $user->save();

            return response()->json(['message' => 'Thông tin người dùng đã được cập nhật'], 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Lỗi cơ sở dữ liệu: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi: ' . $e->getMessage()], 500);
        }
    }

    public function changeUserPassword(Request $request)
    {
        try {
            $user = auth()->user();
            $currentPassword = $request->input('currentPassword');
            $newPassword = $request->input('newPassword');
            $confirmPassword = $request->input('confirmPassword');

            if (!Hash::check($currentPassword, $user->userPassword)) {
                return response()->json(['message' => 'Mật khẩu cũ không đúng'], 401);
            }

            if ($newPassword !== $confirmPassword) {
                return response()->json(['message' => 'Mật khẩu mới không khớp'], 400);
            }

            $user->userPassword = Hash::make($newPassword);
            $user->save();

            return response()->json(['message' => 'Mật khẩu đã được cập nhật'], 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Lỗi cơ sở dữ liệu: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi: ' . $e->getMessage()], 500);
        }
    }

    public function getUserBills(Request $request)
    {
        try {
            $email = $request->user()->userEmail;

            $bills = Bill::where('userEmail', $email)->get();

            if ($bills->isEmpty()) {
                return response()->json(['message' => 'Người dùng chưa có đơn hàng nào'], 200);
            } else {
                return response()->json(['bills' => $bills], 200);
            }
        } catch (QueryException $e) {
            return response()->json(['message' => 'Lỗi cơ sở dữ liệu: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi: ' . $e->getMessage()], 500);
        }
    }

    public function getUsers()
    {
        try {
            $products = User::all();

            return response()->json($products);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Đã xảy ra lỗi: ' . $e->getMessage()], 500);
        }
    }
}

export interface ToastCProps {
    isShow: boolean;
    variant: string;
    message: string;
    onDismiss: () => void;
}

export interface ShowModalProps {
    message: string;
    handleOnClickOke?: () => void;
}
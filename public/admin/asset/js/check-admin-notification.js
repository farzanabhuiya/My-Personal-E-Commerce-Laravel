// Function to check for pending documents in the verification_requests table
function checkData() {
    fetch("/api/getVerifyData")
        .then((response) => response.json())
        .then((data) => {
            const hasPendingVerifications = data.some(
                (record) => record.status === "pending"
            );
            updatePendingVerification(hasPendingVerifications);
            return hasPendingVerifications;
        })
        .then((hasPendingVerifications) => {
            fetch("/api/getPendingUser")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingUsers = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingUser(hasPendingUsers);
                    updateNotificationIcon(
                        hasPendingVerifications || hasPendingUsers
                    );
                    return hasPendingUsers;
                })
                .catch((error) => {
                    console.error("Error fetching Users data:", error);
                });
        })
        .then((hasPendingUsers) => {
            fetch("/api/getPendingVideo")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingVideo = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingVideo(hasPendingVideo);
                    updateNotificationIcon(
                        hasPendingVideo ||
                            hasPendingUsers ||
                            hasPendingVerifications
                    );
                    return hasPendingVideo;
                });
        })
        .then((hasPendingVideo) => {
            fetch("/api/getPendingUserReport")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingUserReport = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingUserReport(hasPendingUserReport);
                    updateNotificationIcon(
                        hasPendingVideo ||
                            hasPendingUserReport ||
                            hasPendingUsers ||
                            hasPendingVerifications
                    );
                    return hasPendingUserReport;
                });
        })
        .then((hasPendingUserReport) => {
            fetch("/api/getPendingVideoReport")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingVideoReport = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingVideoReport(hasPendingVideoReport);
                    updateNotificationIcon(
                        hasPendingVideoReport ||
                            hasPendingVideo ||
                            hasPendingUserReport ||
                            hasPendingUsers ||
                            hasPendingVerifications
                    );
                    return hasPendingVideoReport;
                });
        })
        .then((hasPendingVideoReport) => {
            fetch("/api/getPendingDeposit")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingDeposit = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingDeposit(hasPendingDeposit);
                    updateNotificationIcon(
                        hasPendingDeposit ||
                            hasPendingVideoReport ||
                            hasPendingVideo ||
                            hasPendingUserReport ||
                            hasPendingUsers ||
                            hasPendingVerifications
                    );
                    return hasPendingDeposit;
                });
        })
        .then((hasPendingDeposit) => {
            fetch("/api/getPendingWithdraw")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingWithdraw = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingWithdraw(hasPendingWithdraw);
                    updateNotificationIcon(
                        hasPendingWithdraw ||
                            hasPendingVideoReport ||
                            hasPendingVideo ||
                            hasPendingUserReport ||
                            hasPendingUsers ||
                            hasPendingVerifications ||
                            hasPendingDeposit
                    );
                    return hasPendingWithdraw;
                });
        })
        .then((hasPendingWithdraw) => {
            fetch("/api/getPendingMonetization")
                .then((response) => response.json())
                .then((data) => {
                    const hasPendingVerification = data.some(
                        (record) => record.status === "pending"
                    );
                    updatePendingMonetization(hasPendingVerification);
                    updateNotificationIcon(
                        hasPendingVerification ||
                            hasPendingVideoReport ||
                            hasPendingVideo ||
                            hasPendingUserReport ||
                            hasPendingUsers ||
                            hasPendingVerifications ||
                            hasPendingDeposit ||
                            hasPendingWithdraw
                    );
                    return hasPendingVerification;
                });
        })
        .catch((error) => {
            console.error("Error fetching Pending Verifications data:", error);
        });
}

function updateNotificationIcon(hasPendingDocuments) {
    const notificationDot = document.getElementById("notification-dot");
    notificationDot.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingVerification(hasPendingDocuments) {
    const verify = document.getElementById("isVerify");
    verify.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingUser(hasPendingDocuments) {
    const user = document.getElementById("isUser");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingMonetization(hasPendingDocuments) {
    const user = document.getElementById("isMonetization");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingVideo(hasPendingDocuments) {
    const user = document.getElementById("isVideos");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingWithdraw(hasPendingDocuments) {
    const user = document.getElementById("isWithdraw");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingDeposit(hasPendingDocuments) {
    const user = document.getElementById("isDeposit");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingUserReport(hasPendingDocuments) {
    const user = document.getElementById("isUserReport");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

function updatePendingVideoReport(hasPendingDocuments) {
    const user = document.getElementById("isVideoReport");
    user.style.display = hasPendingDocuments ? "block" : "none";
}

// Call the function to check pending documents when needed
checkData();

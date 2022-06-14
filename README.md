# Budget-Tracker
Personal Budget Tracker effective financial management


# Yii2 PHP Framework 

composer create-project yiisoft/yii2-app-basic basic


# Creata Database & Tables

    # Category
    CREATE TABLE `bt_category` (
    `id_category` int(11) AUTO_INCREMENT PRIMARY KEY,
    `category_name` varchar(255) NOT NULL,
    `status` int(1) NOT NULL
    );



    # Category
    CREATE TABLE `bt_expense` (
    `id_expense` int(11) AUTO_INCREMENT PRIMARY KEY,
    `id_category` int(11) NOT NULL,
    `expense_name` varchar(255) NOT NULL,
    `image` varchar(255) NOT NULL,
    `amount` varchar(255) NOT NULL,
    `deleted` int(1) NOT NULL,
    `created_by` int(11) NOT NULL,
    `date_created` datetime NOT NULL,
    `updated_by` int(11) NOT NULL,
    `date_updated` timestamp 
    ); 

    # users
    CREATE TABLE `bt_users` (
    `id_user` int(11) AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `otp` varchar(4) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `date_created` datetime NOT NULL,
    `date_updated` timestamp
    ) 

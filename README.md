
(Voucher code SYSTEM without using MODEL and breeze(for authentication)wala rin ung admin part try mo gawin  HAHAHAHA)

Please follow the instructions carefully to avoid any errors.

Step 1: Create Laravel Project

    Open your terminal or command prompt.
    Run the following command to create a new Laravel project:

Step 2: Copy Controllers

    Visit the repository and locate the following controllers:
    LoginController
    RegisterController
    VoucherController
    Copy these three controllers from the repository.
    Navigate to the 'app/Http/Controllers' directory of your Laravel project.
    Paste the copied controllers into this directory.

Step 3: Update Routes

    In the repository, locate the 'routes/web.php' file.
    Copy the entire content of the 'routes/web.php' file.
    Navigate to the 'routes' directory of your Laravel project.
    Open the 'web.php' file in a text editor.
    Replace the existing content with the copied content from the repository.

Step 4: Update Views

    In the repository, locate the 'views' folder.
    Copy all the files and folders inside the 'views' folder, except for 'welcome.blade'.
    Navigate to the 'resources/views' directory of your Laravel project.
    Paste the copied files and folders into this directory.

Step 5: Import the Database

    In the repository, locate the 'practice.sql' file.
    Open your phpMyAdmin.
    Create a new database named 'practice'.
    Select the newly created database from the left-hand panel.
    Click on the 'Import' tab in the top menu.
    Choose the 'practice.sql' file and click 'Go' to import the database structure and data.

Step 6: Configure Environment

    In your Laravel project directory, find the '.env' file.
    Open the '.env' file in a text editor.
    Locate the line that specifies the database name and change it to:
    DB_DATABASE=practice
<p align="center"><a href="https://blankfactor.com/about/" target="_blank"><img src="https://vincularlatam.com/zipsydro/Logo-Blankfactor-transparente-300x300.png" width="300"></a></p>

## About Blankfactor

We’re a global technology partner that provides end-to-end digital services. Combining our unparalleled experience and successful track record with our diverse and multidisciplinary top talent that works hand-in-hand with your team, we deliver guaranteed excellence in every project.

## Instructions to run

This project was built using Laravel Sail, a light-weight command-line interface for interacting with Laravel's default Docker development environment. To run this project, just follow the steps below:

- Clone the repo [https://github.com/seytone/blankfactorphptest.git](https://github.com/seytone/blankfactorphptest.git) to download to your local.
- Open a Linux or WSL2 terminal
- Run: git clone https://github.com/seytone/blankfactorphptest.git
- Run: cd blankfactorphptest
- Run: composer install
- Run: sail up -d
- Run: sail artisan migrate

If you experiment issues with .env file while running sail commands, try to do the following inside WSL:

- Run: sudo apt-get update
- Run: sudo apt-get install dos2unix
- Run: dos2unix .env
- Finally, run sail up -d again

## Instructions to test

You can use Postman in order to test the API methods created for the test. So, just import the Blanckfactor PHP-test.postman_collection.json file to Postman and run each method in the correct order.

- Register: Create a new user with the required fields in the body form-data option (name, email and password).
- Login: Use the user created with the previous method to login and get access to get access to restricted methods.
- User: Set a bearer token header with the access_token returned to the previous method, then specify an user ID in the url to retrieve their info.

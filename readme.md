How to run:

 - `git clone git@github.com:Volen-AS/test.git`
 - `cd test`
 - `docker-compose up`
 - in other terminal window/tab
 - `docker-compose exec test bash`
 - `composer install`
 - `php artisan migrate --seed`
 - now access http://test.localtest.me, if you will be asked to provide credentials, use `User1@g.g` for user name and `123123123` for password
 - to listen for sending jobs run `php artisan queue:listen` or `php artisan queue:work` inside `test` docker conainer
 - `php artisan sms_list:check` (deferred shipments will send if the date has reached them already or php artisan schedule:run)
 - sms after sent you can see in logs


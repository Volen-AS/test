-clone project

-create db 'test'

-php artisan migrate -seed  ( will create for first user profile, groups, massage template);

- php artisan queue:listen or php artisan queue:work  ( jods)

- php artisan sms_list:check   (deferred shipments will send if the date has reached them already or php artisan schedule:run)

- sms after sent you can see in logs

and login user  app as:

User1@g.g

123123

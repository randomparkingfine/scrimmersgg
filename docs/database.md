# Databases Heroku, ClearDB, and PHP

I'll cover the easier steps first then the more in-depth ones later.

Whats covered:

1. Setting up the Heroku plugin
2. _Connecting_ to the remote database
3. Sending some test data from a _local machine_ to the _remote database_
4. Interacting with that database with _php_


## Heroku Plugin

First and foremost provision the `ClearDB` plugin on the Heroku app.
On Heroku, go to the app's `Resources` tab and look for the `ClearDB MySQL` plugin.

## Connect to the remote database

First we'll establish some kind of _test connection_ so that we can connect at all.
Get the `CLEARDB_DATABASE_URL` from Heroku under the _Settings_ tab under _Reveal Config Vars_.

The url should look like `msql://foo:bar@some-cool-thing.what.ever/heroku_asdf?....`. 
This url gives us all the credentials we need to connect.
Here's a break down of the url:

Username
:   foo

Password
:   bar

Host
:   some-cool-thing.what.ever

DB Name
:   heroku_asdf

### Connecting with MySQL Workbench

[MySQL workbench Download Link](https://www.mysql.com/products/workbench/)

Go to `Database` -> `Manage Connections`: `New` | `Connection`

_Default schema can be left out for later_.

NOTE: if you're on a \*nix system the password might say something about a keychain(really who uses this feature).
As long as you have the password handy you can always ignore any warnings and copy paste the database password in when asked.

_Read the whole message because_: sometimes sql versions are completely compatible but it _should_ be fine for our purposes
of upload purely educational sample data.

### Connecting via MySQL command line

There is one note to keep in mind: `-p` and `--password` don't actually take the password as it's argument... it's actually __the hostname__.
This is to keep the password out of your `.bash_history` and `$HISTORY`: _which is plaintext, which is why that would be bad practice_.

Here's the command you need for basic usage: `mysql -u foo -p heroku_asdf -h some-cool-thing.what.ever`

Here's the output of this command:

```
smolltucc  ~  % mysql -u foo -p heroku_asdf -h some-cool-thing.what.ever
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 1234
Server version: 5.5.56-log MySQL Community Server (GPL)

Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql>
```

If all goes well we can now proceed to uploading some test data.

## Uploading a Sample to the database

TODO
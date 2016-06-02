WP-CLI Anonymize
================

A WP-CLI extension that allows for data-anonymization on Wordpress installations. **Why?** Because a lot of devs work in DTAP environments. And sometimes a Test or Acceptance environment is created from the Production database. At the very least, this means that User data like email addresses populate a database where they don't belong. But it could also mean information from the wp-comments table is outside the Production environment. This table contains personal information, including IP address. More advanced Wordpress sites generally use Advanced Custom Fields, and may contain even more personal data. The best way to handle the DTA environments would be to scramble this information. That way the environment will look and feel like Production, but contain none of the ( possibly ) sensitive data

Development
-----------

To set up an easy way to develop this extension. Clone the repo and initialize WP core so you can run the command within that instance.

```bash
git clone git@github.com:hoppinger/wp-cli-anonymize-command.git

cd wp-cli-anonymize-command

wp core download

wp core config

```

Contributing
------------

Bug reports and pull requests are welcome on GitHub at https://github.com/hoppinger/wp-cli-anonymize-command. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

Hoppinger
---------

This cli extension was created by [Hoppinger](http://www.hoppinger.com)

License
-------

The gem is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

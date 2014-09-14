#!/usr/bin/perl -w

# DELETE THE INSTALLATION DIRECTORIES
# and then go to the admin login page

use strict;
unlink $0;
exec("/bin/rm -fr ./installation/");
use CGI;
print CGI::redirect("http://www.ajfstuart.com/blog/administrator/");

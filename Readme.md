
install brew: ```/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"```
 then
   echo 'export PATH="/opt/homebrew/opt/php@8.1/bin:$PATH"' >> /Users/michellecurrier/.bash_profile

brew services start php@8.1



run with live server and PHP extensions probably don't need homebrew.

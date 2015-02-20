# Bitcoin_PHP
Blockchain API PHP Library

##Syntax:

# inBitcoin()
Use if you want a currency in Bitcoin (ie $50 in btc or €50 in bitcoin)
Syntax:
  inBitcoin(Currency Code, Amount in that currency, Exact or rounded)
  If you do not want the bitcoin amount rounded to 3 decimal places, put '1' (without quotes) as the third paramater.
  ie:
  inBitcoin("USD", 50); would give you 0.389
  inBitcoin("USD", 50, 1); would give you 0.38828478395457392
  
# recieveBitcoin()
Use if you want someone to send you bitcoin
Syntax:
  recieveBitcoin(Your Bitcoin Address, Callback URL [optional])

# a network tool for people in PRC

---

## Resource

### dns-over-https
file `/dns.php`

just [Google DNS](https://dns.google.com/) Mirror 

parameter should base64 encode and urlencode
and base64 decode the response

name=urlencode(base64encode("img.alicdn.com")) 
edns_client_subnet=urlencode(base64encode("123.125.18.108"))

**Demo**   
`https://prudent-travels.000webhostapp.com/dns.php?name=&edns_client_subnet=`

---

### Pac File
file `/pac.php`

Build by [mono_pac](https://github.com/blackgear/mono_pac) 

use proxy to foreign site and Direct to PRC site.

**Demo**

`https://prudent-travels.000webhostapp.com/pac.php?a=SOCKS5&b=192.168.1.1:1080`

generate a pac file which use `SOCKS5 192.168.1.1` proxy, copy and parse to [SwitchyOmega](https://github.com/FelisCatus/SwitchyOmega) 

---

Online Proxy
---
https://prudent-travels.000webhostapp.com/php-proxy/
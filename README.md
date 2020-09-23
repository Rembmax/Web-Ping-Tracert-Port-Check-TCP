# Php-Option-Network





git clone https://Rembmax:maxia265656@github.com/Rembmax/Php-Option-Network.git



Activate forwarding

iptables -t nat -I PREROUTING -p tcp -d 192.168.1.7 --dport 80 -j DNAT --to-destination 192.168.122.2:80
iptables -I FORWARD -m state -d 192.168.122.2/24 --state NEW,RELATED,ESTABLISHED -j ACCEPT

Remove forwarding

iptables -t nat -D PREROUTING -p tcp -d 192.168.1.7 --dport 80 -j DNAT --to-destination 192.168.122.2:80
iptables -D FORWARD -m state -d 192.168.122.2/24 --state NEW,RELATED,ESTABLISHED -j ACCEPT

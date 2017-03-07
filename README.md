# Projeto de Dw (Samba)
  O Samba é um "software servidor" para Linux (e outros sistemas baseados em Unix) que permite o gerenciamento e compartilhamento de recursos em redes formadas por computadores com o Windows.
  Nosso projeto tem como objetivo principal implementar um serviço web para facilitar a configuração e uso do samba para compartilhamento de arquivos com uma interface amigável e de fácil uso.

# Sistema Existente
  - Webmin SAMBA
  
![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170226_0.png)



![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170316_0.png)



![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170538_0.png)


# Esboço De Tela
  - Exaltasamba

![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/Esboc%CC%A7o3.jpg)

# Comandos utilizados para instalação e configuração do samba

  Basicamente as configurações do samba utilizam o pico, nano ou qualquer outra ferramenta de escrita, para fazer as configurações no /etc/samba/smb.conf

  - apt-get install samba
  - chmod +777 /{pasta-a-ser-compartilhada}
  - vim /etc/samba/smb.conf
    - [global]
      - workgroup = {nome-do-grupo}
      - security = {tipo-de-segurança}
     - [usuário]
      - writeable = {yes-no}
      - path = {local-da-pasta-compartilhada}
      - browseable = {yes-no}
      - valid users = {usuários-permitidos}
  - service smbd restart
  - service nmbd restart
  - smbpasswd -a {nome-do-usuário} (para criar o usuário no samba)
      

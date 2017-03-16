# Exaltasamba

O Samba é um "software servidor" para Linux (e outros sistemas baseados em Unix) que permite o gerenciamento e compartilhamento de recursos em redes formadas por computadores com o Windows.


## Objetivo

Nosso projeto tem como objetivo principal implementar um serviço web para facilitar a configuração e uso do samba para compartilhamento de arquivos com uma interface amigável e de fácil uso para que, o usuario inexperiente quanto a comandos shell, possa facilmento ultilizar o samba:

* adicionar pastas a serem compartilhadas com o windows
* garantir a segurança do compartilhamento

## Sistema Existente

Webmin SAMBA

O Webmin é uma interface web para a administração do seu servidor, onde você pode configurar contas de usuário configurar servidores apache, servidores DNS e entre outros serviços. Nesse caso estamos utilizando o webmin como base para criação da nossa interface web do servidor samba.

## Instalação

 Para a execução do projeto é necessário que seu computador possua o **servidor samba** intalado, mas caso não possua estaremos disponibilizando um Vagrant com o servidor já instalado e além disso mostraremos de maneira superficial como é feita a instalação e configuração do samba. No caso de existir alguma duvida sobre a instalação do samba estaremos disponibilizando um site que auxilie na instalação.
 
 [vivaolinux](https://www.vivaolinux.com.br/artigo/Samba-Instalacao-e-configuracao-descomplicada/)
 
## Comandos

### Instalação do samba

 ```
    apt-get install samba
 ```


### Criar o usuário no samba

  ```
  $ smbpasswd -a {nome-do-usuário} (para criar o usuário no samba)
  ```

### Permissão da pasta a ser compartilhada
  
  ```
    $ chmod +777 /{pasta-a-ser-compartilhada}
  ``` 

### Reiniciar o servidor samba

  ```
  $ service smbd restart
  ```

  ```
  $ service nmbd restart
  ```
  
## Configuração do arquivo

Basicamente as configurações do samba são feitas no arquivo smb.conf, e para realizar as configurações basta abrir o arquivo com alguma ferramenta de escrita como o pico, o nano, o vim ou qualquer editor de sua preferência.

  ```
    $ vim /etc/samba/smb.conf
  ```

    ```
      [global]
         workgroup = {nome-do-grupo}
         security = {tipo-de-segurança}
      [usuário]
         writeable = {yes-no}
         path = {local-da-pasta-compartilhada}
         browseable = {yes-no}
         valid users = {usuários-permitidos}
    ```




* Figura 1 - Pagina inicial do Webmin onde são exibidas as pastas compartilhadas e o acesso as configurações do samba*

![Alt Text](/doc/img/IMG_20022017_170226_0.png)

* Figura 2 - Mostra as Configuracoes de seguranca do samba*

![Alt Text](/doc/img/IMG_20022017_170316_0.png)


## Esboço De Tela

* Figura 3 - Tela da Login

![Alt Text](/doc/img/TelaLogin.png)

* Figura 4 - Tela inicial do programa, onde lista as pastas compartilhadas e o acesso as configuracoes.

![Alt Text](/doc/img/Tela1.png)

* Figura 5 - Configuracoes de Compartilhamento, onde configuraremos os usuarios, grupos e suas permissoes

![Alt Text](/doc/img/Comp.png)



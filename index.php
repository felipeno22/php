<?php

echo 'hello word';
echo 'ola mundo';

/*
1- criando a estrutura do git em uma pasta
no windows (cria uma pasta chamada .git normalmente esta oculta):

git init 


2-add  a pasta do do repostirio do github no
 seu repositorio local no git:

 git clone https://nome/repositorio

 3-add  seu servidor de origem que e o  seu repositorio local:

git remote add origin https://github.com/felipeno22/php.git
 
4- ADD O ARQUIVO PARA A UMA AREA DE ESTAGIO TEMPORARIA(STAGE AREA)

git add nome_arquivo_especifico

obs: vc  se quiser add mais de um arquivo , seja um q  criou ,alterou ou ate quando excluir
 git add --all 

 5- para salvar suas alterações ,exclusoes
git commit -m 'escreva sempre aqui o q  foi feito' 

6- add nome aos seus dados do git
git config --global user.name 'seu  nome'

7- add email aos seus dados do git
git config --global user.email 'coloque o email'


8- impurrando as informações para o servidor
git push origin master  --> master é o servidor principal
do seu repositorio remoto



*/
?>


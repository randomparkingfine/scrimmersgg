export CLEARDB_DATABASE_URL='mysql://b076f7bfe24b18:5c066acc@us-cdbr-iron-east-02.cleardb.net/heroku_4f58a1b681d6fa5?reconnect=true'
export CLEARDB_HOST=us-cdbr-iron-east-02.cleardb.net
export CLEARDB_NAME=heroku_4f58a1b681d6fa5
export CLEARDB_PASSWORD=16f9125243321f4
export CLEARDB_USERNAME=b076f7bfe24b18
ek='S=.1dK-3ySjQUO0gCucJe4I_Q.kbren_Kx==9=EFtoZFBa4q=dTr5j_eixBfAduuWW8Fk'
MAIL=$(printf $ek | sed 's/=/G/g')
export MAIL 

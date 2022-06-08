const express = require("express");
const app = express();
const path = require("path");
var __dirname = path.resolve();
const mysql = require("mysql");
const sha1 = require("sha1");

  app.engine('.html', require('ejs').__express)
  app.use('/views', express.static(path.join(__dirname, '/views')))

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: false }));
//Conexão com o banco
const connection = mysql.createConnection({
  host:"185.213.81.205",
  user:"u553234134_Gizaac",
  password:"Gizaac12343124",
  database:"u553234134_Artisan",
  port:"3306"
})

app.get("/",function(req,res){
  
  connection.query("select * from usuario", function(erro,linhas,colunas){
    if(erro){
      console.log(erro.mensage)
    }
    else{
      res.render(__dirname+"/views/index.html",{usuarios:linhas})
    }
  })
})
//Função listar
app.get("/listar",function(req,res){
  
  connection.query("select * from usuario", function(erro,linhas,colunas){
    if(erro){
      console.log(erro.mensage)
    }
    else{
      res.render(__dirname+"/views/index.html",{usuarios:linhas})
    }
  })
})

app.get("/cadastrar",function(req,res){
  res.render(__dirname+"/views/cadastrar/cadastrar.html",{msg:"Cadastro de novos usuarios"});
})


//Cadastro do usuário
app.post("/cadastrar", function(req,res){
  var nome = req.body.nome;
  var endereco = req.body.endereco;
  var cpf = req.body.cpf;
  var senha = sha1(req.body.senha);

  const novoUsuario ={'nome':nome,'endereco':endereco,'cpf':cpf,'senha':senha};

  connection.query("insert into usuario set ?",novoUsuario,function(erro,respo){
    if(erro){
      console.log(erro.stack)
    }
    else{
      console.log("Cliente inserido ",respo.insertId)
    }
    res.render(__dirname+"../views/cadastrar/cadastrar.html",{msg: nome+" Cadastrado com sucesso"})
  })
  
})

//Deletar usuário
app.get("/deletar/:id",function(req,res){
  var id = req.params.id;

  connection.query('DELETE FROM usuario Where id = ?',[id], function(err, result) {
    console.log("Registro Deletado!!");
  });
  res.redirect("/")
})

app.get('/editar/:id',function (req, resposta)  {
  var id = req.params.id;
  
  connection.query("select * from usuario where id=?",[id],function(erro, linha, colunas){
    if(erro){
      console.log(erro.stack)
    }
    else{
      resposta.render(__dirname+"/views/editar/editar.html",{usuario:linha[0]})
    }
  })
})
//Alterar o cadastro
app.post("/editar",function(request,res){
  var nome=request.body.nome;
  var endereco=request.body.endereco;
  var cpf=request.body.cpf;
 
  var id = request.body.id;

  connection.query('UPDATE usuario SET nome = ?, endereco = ?, cpf = ? Where id = ?',[nome,endereco,cpf,id], function(erro,result){
    if(erro){
      console.log(erro)
    }
    res.redirect("/")
  })

  
})




app.listen(process.env.port || 3000);
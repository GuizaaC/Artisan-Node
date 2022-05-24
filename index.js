const express = require("express");
const app = express();
const path = require ("path");
const mysql = require("mysql");
const sha1 = require("sha1");
var __dirname = path.resolve();

app.use(express.static(__dirname+"/Cadastro"));

app.engine("html", require('ejs').renderFile);

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: false}));


const connection = mysql.createConnection({
  host:  "185.213.81.205", // host 
  user: "u553234134_GuIzaac", // user 
  password: "Gzaac12343124", // password 
  database: "u553234134_BD_Artisan", // database
  port: "3306" // port 
});
app.get("/", function (req, res){
  connection.query("select * from Cliente",
    function(erro, linhas, colunas){
      if(erro){
        console.log(erro.mesage)
      }
      else{
        res.render(__dirname+"/Cadastro/cadastro.html", 
          {usuarios:linhas})
      }
    })
})

  
//cadastro
app.get("/cadastrar", function(req,res){
  res.render(__dirname+"/Cadastro/cadastro.html",{msg:"Cadastro de novos usuarios"});
})

app.post("/cadastrar", function(req,res){
  var Nome_Cliente = req.body.Nome_Cliente;
  var Endereco_Cliente = req.body.Endereco_Cliente;
  var Telefone_Cliente = req.body.Telefone_Cliente;
  var CPF_Cliente = req.body.CPF_Cliente;
  var Senha_Cliente = sha1(req.body.Senha_Cliente);
  var Email_Cliente = req.body.Email_Cliente;
  var Data_Cliente = req.body.Data_Cliente;
  const novoCliente ={'Nome_Cliente':Nome_Cliente, 'Endereco_Cliente':Endereco_Cliente, 'CPF_Cliente':CPF_Cliente, 'Senha_Cliente':Senha_Cliente, 'telefone':Telefone_Cliente,'cpf':CPF_Cliente, 'data':Data_Cliente,'email':Email_Cliente};

  connection.query("insert into Cliente set ?", novoCliente, function(erro,respo){
    if(erro){
      console.log(erro.stack)
    }
    else{
      console.log("Cliente inserido ", respo.insertId)
    }
    res.render(__dirname+"/Home/home.html", {msg: " Cadastrado com sucesso"})
  })
})

//Deletar
app.get("/deletar/: id", function(req,res){
  var id = req.params.id;

    connection.query('DELETE FROM Cliente where id = ?',[id], function(erro,result){
      console.log("registro deletado!!")
    });
  res.redirect("/")
})

//Editar
app.get("/editar/:id", function(req,resposta){
  var id = req.params.id;
  connection.query("select * from Cliente where id = ?",[id], function(erro, linha, colunas){
    if(erro){
      console.log(erro.stack)
    }
    else{
      resposta.render(__dirname+"/views/editar.html",
                      //aq
      {Cliente:linha[0]})
    }
  })
})

app.post("/editar", function(request,res){
  var nome=request.body.nome;
  var endereco=request.body.endereco;
  var cpf=request.body.cpf;

  var id = request.body.id;

  connection.query('UPDATE usuario SET nome = ?, endereco = ?, cpf = ? Where id = ?',
  [nome, endereco, cpf, id], function(erro, result){
    if(erro){
      console.log(erro)
    }
    res.redirect("/")
  })
})

  app.listen(process.env.port || 3000);
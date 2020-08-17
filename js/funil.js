/**
 * 
 */
if("undefined"==typeof jQuery)throw new Error("jQuery necessário para fazer a integração com Funil de Vendas");

let registra_dados_funil = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda = 49323, campanha = 7211) =>
{
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(campanha);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo":"Justa Website",
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 7719,
              "codigo_canal_venda": codigo_canal_venda,
              "personalizados":[
               
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     $.ajax({
        type: 'POST',
        url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
        dataType: "json",
        contentType: 'application/json',
        data: JSON.stringify(opps),
        async: false,
        success:  data => {
            console.log(`Success: ${data}`);
        }, 
        error: data => {
            console.log(`Error: ${data}`);
        }
     });
        
     return sent;
}

let registra_dados_funil_linkou = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda, origem) =>
{
    
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(`Telefone: ${telefone}`);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo": `Linkou - ${origem}`,
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 7808,
              "codigo_canal_venda": codigo_canal_venda,
              "personalizados":[
                {
                    "titulo": "telefone",
                    "valor": telefone
                }
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     console.log('Dados: ', JSON.stringify(opps));
  
        $.ajax({
            type: 'POST',
            url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify(opps),
            async: false,
            success:  data => {
                console.log(`Success: ${data}`);
                console.log(data);
            }, 
            error: data => {
                console.log(`Error: ${data}`);
                console.log(data);
            }
        });
        
     return sent;
}

let registra_dados_funil_tef = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda, origem) =>
{
    
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(`Telefone: ${telefone}`);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo": `Tef - ${origem}`,
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 7808,
              "codigo_canal_venda": codigo_canal_venda,
              "personalizados":[
                {
                    "titulo": "telefone",
                    "valor": telefone
                }
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     console.log('Dados: ', JSON.stringify(opps));
  
        $.ajax({
            type: 'POST',
            url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify(opps),
            async: false,
            success:  data => {
                console.log(`Success: ${data}`);
                console.log(data);
            }, 
            error: data => {
                console.log(`Error: ${data}`);
                console.log(data);
            }
        });
        
     return sent;
}

let registra_dados_funil_Parcelinha = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda, origem) =>
{
    
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(`Telefone: ${telefone}`);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo": `Parcelinha - ${origem}`,
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 7808,
              "codigo_canal_venda": codigo_canal_venda,
              "personalizados":[
                {
                    "titulo": "telefone",
                    "valor": telefone
                }
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     console.log('Dados: ', JSON.stringify(opps));
  
        $.ajax({
            type: 'POST',
            url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify(opps),
            async: false,
            success:  data => {
                console.log(`Success: ${data}`);
                console.log(data);
            }, 
            error: data => {
                console.log(`Error: ${data}`);
                console.log(data);
            }
        });
        
     return sent;
}


let registra_dados_funil_maquininhas = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda, origem) =>
{
    
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(`Telefone: ${telefone}`);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo": `Maquininha - ${origem}`,
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 7808,
              "codigo_canal_venda": codigo_canal_venda,
              "personalizados":[
                {
                    "titulo": "telefone",
                    "valor": telefone
                }
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     console.log('Dados: ', JSON.stringify(opps));
  
        $.ajax({
            type: 'POST',
            url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify(opps),
            async: false,
            success:  data => {
                console.log(`Success: ${data}`);
                console.log(data);
            }, 
            error: data => {
                console.log(`Error: ${data}`);
                console.log(data);
            }
        });
        
     return sent;
}

let busca_id_vendedor_por_estado = estado => 
{
   //Thaisy - Centro oeste e Norte -> 25060
   //Helo: Sudeste e Sul -> 24923
   // SC, SP, PR, RS, RJ, MG, ES
   //Elizandro: Nordeste -> 24969

   let ids_vendedores_por_estado = [
      { estado: 'Acre', id:25060},
      { estado: 'Alagoas', id:24969},
      { estado: 'Amapá', id:25060},
      { estado: 'Amazonas', id:25060},
      { estado: 'Bahia', id:24969},
      { estado: 'Ceará', id:24969},
      { estado: 'Distrito Federal', id:25060},
      { estado: 'Espirito Santo', id:24923},
      { estado: 'Goiás', id:25060},
      { estado: 'Maranhão', id:24969},
      { estado: 'Mato Grosso', id:25060},
      { estado: 'Mato Grosso do Sul', id:25060},
      { estado: 'Minas Gerais', id:24923},
      { estado: 'Pará', id:25060},
      { estado: 'Paraiba', id:24969},
      { estado: 'Paraná', id:24923},
      { estado: 'Pernambuco', id:24969},
      { estado: 'Piauí', id:24969},
      { estado: 'Rio de Janeiro', id:24923},
      { estado: 'Rio Grande do Norte', id:24969},
      { estado: 'Rio Grande do Sul', id:24923},
      { estado: 'Rondônia', id:25060},
      { estado: 'Roraima', id:25060},
      { estado: 'Santa Catarina', id:24923},
      { estado: 'São Paulo', id:24923},
      { estado: 'Sergipe', id:24969},
      { estado: 'Tocantins', id:25060},
      { estado: 'AC', id:25060},
      { estado: 'AL', id:24969},
      { estado: 'AP', id:25060},
      { estado: 'AM', id:25060},
      { estado: 'BA', id:24969},
      { estado: 'CE', id:24969},
      { estado: 'DF', id:25060},
      { estado: 'ES', id:24923},
      { estado: 'GO', id:25060},
      { estado: 'MA', id:24969},
      { estado: 'MT', id:25060},
      { estado: 'MS', id:25060},
      { estado: 'MG', id:24923},
      { estado: 'PA', id:25060},
      { estado: 'PB', id:24969},
      { estado: 'PR', id:24923},
      { estado: 'PE', id:24969},
      { estado: 'PI', id:24969},
      { estado: 'RJ', id:24923},
      { estado: 'RN', id:24969},
      { estado: 'RS', id:24923},
      { estado: 'RO', id:25060},
      { estado: 'RR', id:25060},
      { estado: 'SC', id:24923},
      { estado: 'SP', id:24923},
      { estado: 'SE', id:24969},
      { estado: 'TO', id:25060},
   ];

   let id = 0;

   ids_vendedores_por_estado.forEach(element => {
      if(element.estado == estado)
      {
         id = element.id;
      }
   });

   //let  { id } = ids_vendedores_por_estado.find(e => e.estado='SP');

   return id;
}

let registra_dados_funil_maquininhas_cartao = (nome, email, telefone,  cidade, estado, utmSource = 'web', codigo_canal_venda, origem) =>
{
    
    let key = "8f1b038c-50e5-4504-bcdb-159179afc470";
    let sent = true;

    let id_vendedor = busca_id_vendedor_por_estado(estado);

   console.log(`Telefone: ${telefone}`);

    let opps = 
    {
        "oportunidades":[
           {
              "titulo": `Cartão ELO`,
              "valor": 0,
              "codigo_vendedor": 27898,
              "codigo_metodologia": 8448,
              "codigo_canal_venda": 49323,
              "personalizados":[
                {
                    "titulo": "telefone",
                    "valor": telefone
                }
              ],
              "empresa":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "endereco_completo":{
                    "cidade": cidade,
                    "uf": estado
                 },
                 "personalizados":[
                    {
                        "titulo": "email",
                        "valor": email
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              },
              "contato":{
                 "nome": nome,
                 "email": email,
                 "telefone1": telefone,
                 "emails_adicionais":[
     
                 ],
                 "personalizados":[
                    {
                       "titulo": "utmSource",
                       "valor": utmSource
                    },
                    {
                        "titulo": "cidade",
                        "valor": cidade
                    },
                    {
                        "titulo": "estado",
                        "value": estado
                    }
                 ]
              }
           },
           
        ]
     };


     console.log('Dados: ', JSON.stringify(opps));
  
        $.ajax({
            type: 'POST',
            url: "https://app.funildevendas.com.br/api/Opportunity?IntegrationKey=" + key,
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify(opps),
            async: false,
            success:  data => {
                console.log(`Success: ${data}`);
                console.log(data);
            }, 
            error: data => {
                console.log(`Error: ${data}`);
                console.log(data);
            }
        });
        
     return sent;
}

console.log('testando');
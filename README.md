# API_WEB_PHP
API web simples feita em PHP usando docker

## Informações Gerais

- **Versão**: 1.0.0
- **Contato**: [jv644@academico.ufs.br](mailto:jv644@academico.ufs.br)
- **Licença**: [Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

## Endpoints

### 1. `GET /`

#### Descrição:
Retorna uma lista de clientes que foram inseridos no banco de dados.

#### Tags:
- **SELECT Clients**: Retorna uma lista de clientes.

#### Resposta:

- **Status 200**: Retorna uma lista de clientes com CPF, nome e data de nascimento.
  
  **Formato da resposta**:
  ```json
  [
    {
      "cpf": "xxx.xxx.xxx-xx",
      "name": "Carlos Fernado Prado",
      "data_nasc": "01/12/2021"
    }
  ]
  ```

### 2. `POST /addUser`

#### Descrição:
Insere um cliente no banco de dados.

#### Tags:
- **INSERT Client**: Insere informações de um cliente no banco de dados.

#### Corpo da Requisição:

- **Exemplo**:
  ```json
  {
    "cpf": "xxx.xxx.xxx-xx",
    "name": "Carlos Fernado Prado",
    "data_nasc": "01/12/2021"
  }
  ```

#### Resposta:

- **Status 200**: Retorna uma mensagem indicando o sucesso da inserção.

  **Formato da resposta**:
  ```json
  {
    "message": "Cliente adicionado"
  }
  ```


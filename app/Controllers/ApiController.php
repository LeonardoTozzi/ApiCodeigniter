<?php

namespace App\Controllers;

class ApiController extends BaseController
{
    public function getUsers()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

        echo $response->getBody();
      
    }

    public function updateUser()
{
    $id = 1;
    $client = \Config\Services::curlrequest();

    // Faz a requisição PUT
    $response = $client->request('PUT', 'https://jsonplaceholder.typicode.com/users/'.$id, [
        'json' => [
            'name' => 'John Doe',
            'email' => 'Johndoe@gmail.com'
        ]
    ]);

    // Verifica se a requisição foi bem-sucedida (código de status 200)
    if ($response->getStatusCode() === 200) {

        // Retorna os dados atualizados na resposta da API
        return json_encode(['message' => 'Usuario atualizado com sucesso']);
    } else {
        // Se a requisição não foi bem-sucedida, retorne uma resposta de err     
        return json_encode(['message' => 'Falha ao atualizar o usuario']);
    }
}
 public function deleteUser()
 {
    $id = 1;
    $client = \Config\Services::curlrequest();

    // Faz a requisição DELETE
    $response = $client->request('DELETE', 'https://jsonplaceholder.typicode.com/users/'.$id);

    // Verifica se a requisição foi bem-sucedida (código de status 200)
    if ($response->getStatusCode() === 200) {

        // Retorna os dados atualizados na resposta da API
        return json_encode(['message' => 'Usuario deletado com sucesso']);
    } else {
        // Se a requisição não foi bem-sucedida, retorne uma resposta de err     
        return json_encode(['message' => 'Falha ao deletar usuario']);
    }
 }

 public function createUser()
{
    $client = \Config\Services::curlrequest();
    // Faz a requisição POST
    $response = $client->request('POST', 'https://jsonplaceholder.typicode.com/users', [
        'json' => [
            'name' => 'Leanne Graham',
            'username' => 'Bret',
            'email' => 'Sincere@april.biz',
            'address' => [ 
                'street' => 'Kulas Light',
                'suite' => 'Apt. 556',
                'city' => 'Gwenborough',
                'zipcode' => '92998-3874',
                'geo' => [
                    'lat' => '-37.3159',
                    'lng' => '81.1496'
                ]
            ],
            'phone' => '1-770-736-8031 x56442',
            'website' => 'hildegard.org',
            'company' => [
                'name' => 'Romaguera-Crona',
                'catchPhrase' => 'Multi-layered client-server neural-net',
                'bs' => 'harness real-time e-markets'
            ]
        ]
    ]);
       // Verifica se a requisição foi bem-sucedida (código de status 201 - Created)
    if ($response->getStatusCode() === 201) {
        // Retorna uma mensagem de sucesso em formato JSON
        return json_encode(['message' => 'Usuario criado com sucesso']);
    } else {
        // Se a requisição não foi bem-sucedida, retorna uma mensagem de erro em formato JSON
        return json_encode(['message' => 'Falha ao criar usuário']);
    }
}
}
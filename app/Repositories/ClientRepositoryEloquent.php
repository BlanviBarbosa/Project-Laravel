<?php

namespace ProjectLaravel\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use ProjectLaravel\Entities\Client;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository {

	public function model() {

		return Client::class ;
	}
}
<?php

namespace ProjectLaravel\Services;

class ClientService {

	protected $repository;

	public function __construct(clientRepository $repository) {
		$this->repository = $repository;
	}

	public function create(array $data) {
		//enviar um email
		//disparar notificação
		//postar um tweet
		return $this->repository->create($data);
	}

	public function update(array $data, $id) {
		return $this->repository->update($data, $id);
	}
}

<?php

namespace ProjectLaravel\Services;

use Prettus\Validator\Exceptions\ValidatorException;
use ProjectLaravel\Repositories\ProjectRepository;
use ProjectLaravel\Validators\ProjectValidator;

class ProjectService {

	/**
	 * @var ClientRepository
	 */
	protected $repository;

	/**
	 * @var ClientValidator
	 */
	protected $validator;

	public function __construct(ProjectRepository $repository, ProjectValidator $validator) {

		$this->repository = $repository;
		$this->validator  = $validator;
	}

	public function create(array $data) {

		try {

			$this->validator->with($data)->passesOrFail();

			return $this->repository->create($data);

		} catch (ValidatorException $e) {

			return [
				'error'   => true,
				'message' => $e->getMessageBag()
			];
		}
		//enviar um email
		//disparar notificação
		//postar um tweet
	}

	public function update(array $data, $id) {

		try {

			$this->validator->with($data)->passesOrFail();

			return $this->repository->update($data, $id);

		} catch (ValidatorException $e) {

			return [
				'error'   => true,
				'message' => $e->getMessageBag()
			];
		}
	}
}
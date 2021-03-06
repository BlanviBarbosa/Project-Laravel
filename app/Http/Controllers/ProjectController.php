<?php

namespace ProjectLaravel\Http\Controllers;

use Illuminate\Http\Request;

use ProjectLaravel\Repositories\ProjectRepository;
use ProjectLaravel\Services\ProjectService;

class ProjectController extends Controller {
	/**
	 *
	 * @var ProjectRepository
	 */
	private $repository;

	/**
	 *
	 * @var ProjectService
	 */
	private $service;

	/**
	 * @param \ProjectLaravel\Repositories\ProjectRepository $repository
	 * @param \ProjectLaravel\Services\ProjectService $service
	 */
	public function __construct(ProjectRepository $repository, ProjectService $service) {
		$this->repository = $repository;
		$this->service    = $service;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		return $this->repository->all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		return $this->service->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {

		return $this->repository->find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		return $this->service->update($request->all(), $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {

		return $this->repository->delete($id);
	}
}

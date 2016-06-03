<?php
namespace Chatty\Plus\Statuses;

interface StatusRepositoryInterface {

	public function selectAll();

	public function find($id);

}

<?php

class EliminarHojaController extends \BaseController {

	public function destroy($id)
	{
		Hoja::destroy($id);
		return Redirect::to('admin/revista');	
	}
}
<?php

	function selectAll($link, $query){
		$result_set = mysqli_query($link, $query);

		$item = [];

		while($row = mysqli_fetch_array($result_set)){
			array_push($item, $row);
		}

		return $item;
	}

	function adicionar($link, $query){
		return mysqli_query($link, $query);
	}

	function delete($link, $query){
		return mysqli_query($link, $query);
	}

	function selectById($link, $query){
		$result_set = mysqli_query($link, $query);

		$item = mysqli_fetch_assoc($result_set);

		return $item;

	}

?>

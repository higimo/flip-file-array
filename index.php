<?php

	namespace Higimo;

	class FlipFileArray {
		public static function flip(&$files) {
			$result = [];
			foreach ($files as $name => $elFile) {
				foreach ($files[$name] as $property => $value) {
					$result[$property][$name] = $files[$name][$property];
				}
			}
			return $result;
		}
	}
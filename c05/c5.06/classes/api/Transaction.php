<?php
final class Transaction{
	private static $conn;
	private function __construct() {}
	private static $logger; // objeto de log

	public static function open($database){
		if(empty(self::$conn)){
			self::$conn = Connection::open($database);
			self::$conn->beginTransaction();
			self::$logger = NULL;
		}
	}
	public static function get(){
		return self::$conn;
	}
	public static function rollback(){
		if(self::$conn){
			self::$conn->rollback();
			self::$conn = NULL;
		}
	}
	public static function close(){
		if(self::$conn){
			self::$conn->commit();
			self::$conn = NULL;
		}
	}
	public static function setLogger(Logger $logger) {
		self::$logger = $logger;
	}
	public static function log($message){
		if (self::$logger) {
			self::$logger->write($message);
		}
	}
}
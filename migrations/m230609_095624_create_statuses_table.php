<?php

use yii\db\Migration;

/**
 * Class m230609_095624_create_statuses_table
 */
class m230609_095624_create_statuses_table extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp() {
		$this->createTable( '{{%statuses}}', [
			'id'   => $this->primaryKey(),
			'name' => $this->string( 50 )->notNull(),
		] );

		// Insert initial values into the statuses table
		$this->batchInsert( 'statuses', [ 'name' ], [
			[ 'In work' ],
			[ 'Completed' ],
		] );
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown() {
		$this->dropTable( 'statuses' );
	}
}

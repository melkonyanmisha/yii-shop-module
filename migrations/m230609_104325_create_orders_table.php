<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m230609_104325_create_orders_table extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp() {
		$this->createTable( '{{%orders}}', [
			'id'         => $this->primaryKey(),
			'name'       => $this->string( 50 )->notNull(),
			'status_id'  => $this->integer()->notNull(),
			'created_at' => $this->dateTime(),
		] );

		$this->addForeignKey(
			'fk-orders-status_id',
			'orders',
			'status_id',
			'statuses',
			'id',
			'RESTRICT',
			'CASCADE'
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown() {
		$this->dropTable( '{{%orders}}' );
	}
}

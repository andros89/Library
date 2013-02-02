<ul>
	<li>
		<?php
			echo $this->Html->link( __('Show All Users'), 
				array(
					'controller' => 'users',
					'action' => 'index'
				) 
			);
		?>
	<li>
		<?php
			echo $this->Html->link( __('Show All Books'), 
				array(
					'controller' => 'books',
					'action' => 'index'
				) 
			);
		?>
	<li>
		<?php
			echo $this->Html->link( __('Show All Categories'), 
				array(
					'controller' => 'categories',
					'action' => 'index'
				) 
			);
		?>
	<li>
		<?php
			echo $this->Html->link( __('Show All Loans'), 
				array(
					'controller' => 'loans',
					'action' => 'index'
				) 
			);
		?>
	</li>
</ul>

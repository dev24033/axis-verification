<?php
			$checkId = $this->web_model->check_appID($id);
				
            if(count($checkId) > 0)
			{
			$this->web_model->coa_update($coa_update,$id);
			}
			else
			{
				$this->web_model->coa_insert($coa_update);
			}
			
			
			?>
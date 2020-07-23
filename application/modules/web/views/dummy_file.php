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
			
			$this->web_model->office_insert($office_data);
			$this->web_model->office_coa_insert($office_coa_data);
			$step3 = $this->web_model->doc_insert($doc_data);
			
			set_spape_id_dsp_1
			set_spape_id_dsp_2
			set_spape_id_dsp_3
			
			datepickerfrom
			datepickerto
			
			search_data
			example
			?>
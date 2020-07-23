
$(document).ready(function(){
    
   /*=======================================
			datatable js 
		=========================================*/
	
		$('#example').DataTable({
			"language": {
				"search":         "بحث:",
				"zeroRecords":    "لا توجد نتائج للبحث",
				"emptyTable":     "لا توجد بيانات في هذا الجدول",
				"lengthMenu":     "عرض _MENU_ سجل",
				"info":           "عرض السجلات من _START_ ل  _END_ من مجموع السجلات _TOTAL_",
				"infoFiltered":   "(العدد الكلي للسجلات  _MAX_ )",
				"infoEmpty":      "لا توجد سجلات مطابقة للبحث",
				"paginate": {
					"first":      "الاول",
					"last":       "الاخير",
					"next":       "التالي",
					"previous":   "السابق"
				},
			}
	});
	/*===========================================
		confirm delete 
	=============================================*/
	$('.delete').click(function(){
		if(confirm('هل تريد حذف هذا السجل ؟')){
			return true;
		}else{
			return false;
		}
	});
	/*===========================================
		deactive center confirm 
	=============================================*/
	$('.deactive').click(function(){
		if(confirm('هل تريد الغاء اعتماد هذا المركز')){
			return true;
		}else{
			return false;
		}
	});
	/*===========================================
		certify  center confirm 
	=============================================*/
	$('.certify').click(function(){
		if(confirm('هل تريد اعتماد هذا المركز')){
			return true;
		}else{
			return false;
		}
	});
	/*===========================================
		enable or disable text bosx when checked
	============================================*/
	//traning approve date 
	$("#training_cnt").change(function(){
		if(this.checked){
			$("#training_approve_date").prop('disabled', false);
			$("#training_approve_date").prop("required", true);
		}else{
			$("#training_approve_date").prop('disabled', true);
		}
	});

	//emax approve date 
	$("#exam_cnt").change(function(){
		if(this.checked){
			$("#exam_approve_date").prop('disabled', false);
			$("#exam_approve_date").prop("required", true);
		}else{
			$("#exam_approve_date").prop('disabled', true);
		}
	});

	
	//tooltip initialization
	$('[data-toggle="tooltip"]').tooltip();   
	
});


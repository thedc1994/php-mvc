<script>

	function initDatepicker(picker){

 		picker.datepicker({
            todayHighlight: !0,
            format        : 'dd-mm-yyyy',
            autoclose     : true,
        });

        return picker;
	}

	function initImageFile(image, inputFile){

		image.click(function(){
			inputFile.trigger('click');
		});

		inputFile.change(function(){
			var reader = new FileReader();

	        reader.onload = function (e) {
	            var img = image[0];
	            img.src = e.target.result;
	        };
	        reader.readAsDataURL(inputFile[0].files[0]);
		});

	}

	function initDatatable(tableElement, showAll=false, config={}){ // table jquery element

	    var datatableConfig = {
	        bSort: false,
            responsive: !0,
            language  : {
                'sProcessing'  : 'Đang xử lý',
                'sLengthMenu'  : 'Xem _MENU_bản ghi',
                'sZeroRecords' : 'Không tìm thấy dòng nào phù hợp',
                'sInfo'        : 'Đang xem _START_ đến _END_ trong tổng số _TOTAL_ bản ghi',
                'sInfoEmpty'   : 'Đang xem 0 đến 0 trong tổng số 0 bản ghi',
                'sInfoFiltered': '(được lọc từ _MAX_ bản ghi)',
                'sInfoPostFix' : '',
                'sSearch'      : 'Tìm kiếm',
                'sUrl'         : '',
                'oPaginate'    : {
                    'sFirst'       : 'Đầu',
                    'sPrevious': 'Trước',
                    'sNext'    : 'Tiếp',
                    'sLast'    : 'Cuối',

                },
                'select': {
                    rows: {
                        _: 'Đã chọn %d bản ghi',
                        1: 'Đã chọn 1 bản ghi',
                    },
                },
            },

            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, 'All'],
            ],

            iDisplayLength: 2,
        };

        Object.assign(datatableConfig,config);
	    var table = $('#list-users').DataTable(datatableConfig);


        // init mark index for rows
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // init search in collumn table
        table.columns().every(function () {
            var that = this;

            $('input', this.header()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        if(showAll){
            showAllRowsDatatable(table)
        }

        return table;
    }

    function showAllRowsDatatable(table){ // datatable element
        var setting                    = table.settings();
        setting[0]._iDisplayLength = setting[0].fnRecordsTotal();
        table.draw();
    }

</script>

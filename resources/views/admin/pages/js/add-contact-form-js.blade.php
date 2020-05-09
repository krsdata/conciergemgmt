<!--<script src="https://unpkg.com/formiojs@latest/dist/formio.full.min.js"></script>-->
<script src="{{ asset('/admin/js/formio.full.min.js') }}"></script>
<script>
    var boats = [];
    @if(!empty($raw_boats))
    @foreach($raw_boats as $b)
    var boat = {};
    boat['value'] = '{{ $b->id }}';
    boat['label'] = '{{ $b->title }}';
    boats.push(boat);
    @endforeach
    @endif
    Formio.icons = 'fontawesome';
    Formio.builder(document.getElementById('builder'), {}, {
        builder: {
            basic: false,
            advanced: false,
            data: false,
            customBasic: {
                title: 'Basic Components',
                default: true,
                weight: 0,
                components: {
                    textfield: true,
                    textarea: true,
                    email: true,
                    phoneNumber: true,
                    select: true,
                    selectboxes: true,
                    checkbox: true,
                    radio: true,
                    day: true,
                    datetime:true,
                    time: true,
                    content: true,
                    button: true
                }
            },
            custom: {
                title: 'User Fields',
                weight: 10,
                components: {
                    firstName: {
                        title: 'Full Name',
                        key: 'fullName',
                        icon: 'fa fa-terminal',
                        schema: {
                            label: 'Full Name',
                            type: 'textfield',
                            key: 'fullName',
                            input: true
                        }
                    },
                    email: {
                        title: 'Email',
                        key: 'email',
                        icon: 'fa fa-at',
                        schema: {
                            label: 'Email',
                            type: 'email',
                            key: 'email',
                            input: true
                        }
                    },
                    phoneNumber: {
                        title: 'Mobile Phone',
                        key: 'mobilePhone',
                        icon: 'fa fa-phone-square',
                        schema: {
                            label: 'Mobile Phone',
                            type: 'phoneNumber',
                            key: 'mobilePhone',
                            input: true
                        }
                    },
                    select: {
                        title: 'Boats',
                        key: 'boats',
                        icon: 'fa fa-ship',
                        schema: {
                            label: 'Boat Choice',
                            type: 'select',
                            key: 'boats',
                            input: true,
                            data: {
                                values: boats
                            },
                            dataSrc: "values"
                        }
                    }
                }
            },
            layout: {
                components: {
                    table: false
                }
            }
        },
        editForm: {
            textfield: [
                {
                    key: 'api',
                    ignore: true
                }
            ]
        }
    }).then(function(builder) {
        builder.on('saveComponent', function() {
            $('#form-comp').val(encodeURIComponent(JSON.stringify(builder.schema)));
            //console.log(builder.schema);
        });
    });
    $('#cancel').on('click', function(e){
        e.preventDefault();
        location.reload();
    });

    $('#type').on('change', function(e){
        e.preventDefault();
        var type = $(this).val();
        $('select.multiselect-ui').removeAttr("name");
        $('#allPages, #allCategories, #allBoats, #allDest').hide();

        if(type != '')
            $('#optionBox').show();
        else
            $('#optionBox').hide();

        if(type === 'page'){
            $('#allPages').show();
            $('#allPages select').attr("name", "pbc_id[]");
        }
        if(type === 'category'){
            $('#allCategories').show();
            $('#allCategories select').attr("name", "pbc_id[]");
        }
        if(type === 'boat'){
            $('#allBoats').show();
            $('#allBoats select').attr("name", "pbc_id[]");
        }
        if(type === 'dest'){
            $('#allDest').show();
            $('#allDest select').attr("name", "pbc_id[]");
        }
    });
</script>
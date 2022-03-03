<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction Lists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="table">
                        <thead>
                            <tr>
                                <th>Trans ID</th>
                                <th>Acquirer Code</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>O.Amount</th>
                                <th>O.Currency</th>
                                <th>C.Amount</th>
                                <th>C.Currency</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $('#table').DataTable( {
        "pageLength": 50,
        "processing": true,
        "ajax": {
            "url": 'transaction_list/data',
            "cache": true
        },
        "columns": [
            { "data": "transaction.merchant.transactionId",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                $(nTd).html("<a href='transaction/"+oData.transaction.merchant.transactionId+"'>"+oData.transaction.merchant.transactionId+"</a>");
                }
            },
            { "data": "acquirer.code" },
            { "data": "customerInfo.billingFirstName",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                $(nTd).html("<a href='client/"+oData.transaction.merchant.transactionId+"'>"+oData.customerInfo.billingFirstName+"</a>");
                }
            },
            { "data": "customerInfo.billingLastName" },
            { "data": "fx.merchant.originalAmount" },
            { "data": "fx.merchant.originalCurrency" },
            { "data": "fx.merchant.convertedAmount" },
            { "data": "fx.merchant.convertedCurrency" }
        ]
    } );
</script>
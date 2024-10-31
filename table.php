
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="mx-auto bg-white p-5 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Danh Sách Sản Phẩm</h1>
        <div class="flex justify-between items-center mb-4">
            <input type="text" id="searchInput" placeholder="Tìm kiếm..." class="border border-gray-300 rounded px-4 py-2">
            <div>
                <label for="rowsPerPage" class="mr-2">Hàng mỗi trang:</label>
                <select id="rowsPerPage" class="border border-gray-300 rounded px-2 py-1">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Tên Sản Phẩm</th>
                        <th class="px-4 py-2 border">Giá</th>
                        <th class="px-4 py-2 border">Số Lượng</th>
                    </tr>
                </thead>
                <tbody id="tableData">
                </tbody>
            </table>
        </div>
        <div class="flex justify-center mt-4 space-x-2">
            <button id="prevPage" class="px-4 py-2 bg-gray-200 rounded">Trước</button>
            <span id="pageNumber" class="px-4 py-2">1</span>
            <button id="nextPage" class="px-4 py-2 bg-gray-200 rounded">Sau</button>
        </div>
    </div>

    <script>
        const data = [
            { id: 1, name: 'Sản phẩm A', price: '100.000₫', quantity: 10 },
            { id: 2, name: 'Sản phẩm B', price: '200.000₫', quantity: 15 },
            { id: 3, name: 'Sản phẩm C', price: '150.000₫', quantity: 8 },
            { id: 4, name: 'Sản phẩm D', price: '300.000₫', quantity: 5 },
            { id: 5, name: 'Sản phẩm E', price: '120.000₫', quantity: 11 },
            { id: 6, name: 'Sản phẩm F', price: '400.000₫', quantity: 7 },
            { id: 7, name: 'Sản phẩm G', price: '250.000₫', quantity: 12 },
            { id: 8, name: 'Sản phẩm H', price: '90.000₫', quantity: 9 },
            { id: 9, name: 'Sản phẩm I', price: '220.000₫', quantity: 14 },
            { id: 10, name: 'Sản phẩm J', price: '500.000₫', quantity: 6 },
        ];
        let currentPage = 1;
        let rowsPerPage = parseInt($("#rowsPerPage").val(), 10);
        function renderTable(data) {
            const tableData = $("#tableData");
            tableData.empty();
            data.forEach(item => {
                tableData.append(`
                    <tr>
                        <td class="px-4 py-2 border">${item.id}</td>
                        <td class="px-4 py-2 border">${item.name}</td>
                        <td class="px-4 py-2 border">${item.price}</td>
                        <td class="px-4 py-2 border">${item.quantity}</td>
                    </tr>
                `);
            });
        }
        function paginateData() {
            const start = (currentPage - 1) * rowsPerPage;
            const paginatedData = data.slice(start, start + rowsPerPage);
            renderTable(paginatedData);
            $("#pageNumber").text(currentPage);
            $("#prevPage").prop("disabled", currentPage === 1);
            $("#nextPage").prop("disabled", currentPage === Math.ceil(data.length / rowsPerPage));
        }
        $("#searchInput").on("input", function() {
            const searchTerm = $(this).val().toLowerCase();
            const filteredData = data.filter(item => 
                item.name.toLowerCase().includes(searchTerm) ||
                item.price.toLowerCase().includes(searchTerm)
            );
            renderTable(filteredData.slice(0, rowsPerPage));
            currentPage = 1; 
        });
        $("#prevPage").click(function() {
            if (currentPage > 1) {
                currentPage--;
                paginateData();
            }
        });
        
        $("#nextPage").click(function() {
            if (currentPage < Math.ceil(data.length / rowsPerPage)) {
                currentPage++;
                paginateData();
            }
        });
        $("#rowsPerPage").change(function() {
            rowsPerPage = parseInt($(this).val(), 10);
            currentPage = 1; 
            paginateData();
        });
        paginateData();
    </script>

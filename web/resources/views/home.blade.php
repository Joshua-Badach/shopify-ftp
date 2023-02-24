<div id="app">
    <div class="container">
        <div><a href="">Input Supplier</a> || <a href="">List Suppliers</a> || <a href="">Fetch Products</a></div>
        <div class="row">
            <h2>form shit</h2>
            <form method="post" action="FormController@index">
                <label for="supplier">Supplier:</label><br>
                <input type="text" id="supplier" name="supplier"><br>
                <label for="supplierServer">Server:</label><br>
                <input type="text" id="supplierServer" name="supplierServer"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password"><br>
                <label for="remoteFilePath">Remote File Path:</label><br>
                <input type="text" id="remoteFilePath" name="remoteFilePath"><br><br>
                <input type="submit" value="Submit">
            </form>

            <h2>supplier list shit</h2>
            <table>
                {{--foreach--}}
                <tr>
                    <th>Supplier</th>
                    <th>Server</th>
                    <th>Username</th>
                </tr>
                <tr>
                    <td>Test</td>
                    <td>Shit</td>
                    <td>Example</td>
                </tr>
                <tr>
                    <td>Test</td>
                    <td>Shit</td>
                    <td>Example</td>
                </tr>
                <tr>
                    <td>Test</td>
                    <td>Shit</td>
                    <td>Example</td>
                </tr>
            </table>

            <section>
                <p>Todo:</p>
                <p>Data structure for all input needs - logic</p>
                <p>CRUD form - frontend <strong>done</strong></p>
                <p>Ftp connection script - <strong>done</strong>, just need to hookup and pass in shopify</p>
                <p>Research file structure in shopify - research</p>
                <p>Unzip, parse update product listing - logic</p>
                <p>Git setup - <strong>done</strong></p>
            </section>
        </div>
    </div>
</div>
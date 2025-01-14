<main class="content-wrap">
    <header class="content-head">
        <h1>Payment Records</h1>
        <div class="action">
        <form id="sortForm" action="index.php" method="GET">
                <input type="hidden" name="page" value="payments">
                <label for="sort">Sort:</label>
                <select id="sort" name="sort" onchange="document.getElementById('sortForm').submit();">
                    <option value="a-z" <?php echo isset($_GET["sort"]) &&
                    $_GET["sort"] == "a-z"
                        ? "selected"
                        : ""; ?>>A-Z</option>
                    <option value="unpaid" <?php echo isset($_GET["sort"]) &&
                    $_GET["sort"] == "unpaid"
                        ? "selected"
                        : ""; ?>>Unpaid Invoices</option>
                </select>
            </form>
        </div>
    </header>

    <div class="content">
        <section class="payment-records">

            <?php include __DIR__ . "/../queries/payments-query.php"; ?>

        </section>
    </div>
</main>
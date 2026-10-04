
<div class="news-tabs " style="margin-top: 190px; margin-bottom: 50px;">

    <div class="news-tabs__nav">
        <button class="news-tab active" data-tab="in-the-news">
            In The News
        </button>

        <button class="news-tab" data-tab="press-release">
            Press Release
        </button>
    </div>


    <div class="news-tabs__content">

        <div class="news-tab-content active" id="in-the-news">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="news-card">
                        <h3>Featured News Title</h3>
                    </div>
                </div>

            </div>
        </div>


        <div class="news-tab-content" id="press-release">
            <div class="row">

                 <div class="news-grid">

            
            <article class="news-card">

                <div class="news-date">
                    <span class="news-icon">▤</span>
                    <span>01 Oct '26</span>
                </div>

                <h2>
                    Grade A Mall Vacancy Across the Top 7 Cities
                    Fell to 5% in H1 2026
                </h2>

                <a href="#" class="read-more">
                    Read More <span>↗</span>
                </a>

            </article>


            <article class="news-card">

                <div class="news-date">
                    <span class="news-icon">▤</span>
                    <span>01 Oct '26</span>
                </div>

                <h2>
                    Why are NCR Home Prices Rising so Fast?
                </h2>

                <a href="#" class="read-more">
                    Read More <span>↗</span>
                </a>

            </article>


            <article class="news-card">

                <div class="news-date">
                    <span class="news-icon">▤</span>
                    <span>01 Oct '26</span>
                </div>

                <h2>
                    BST Consultants Files Draft
                    Papers for Rs 1000 Crore IPO
                </h2>

                <a href="#" class="read-more">
                    Read More <span>↗</span>
                </a>

            </article>


            <article class="news-card">

                <div class="news-date">
                    <span class="news-icon">▤</span>
                    <span>01 Oct '26</span>
                </div>

                <h2>
                    BST Consultants files Draft
                    Papers for ₹1,000 Crore IPO
                </h2>

                <a href="#" class="read-more">
                    Read More <span>↗</span>
                </a>

            </article>
            </div>

            </div>
        </div>

    </div>

</div> 

<script>
document.querySelectorAll('.news-tab').forEach(tab => {

    tab.addEventListener('click', function () {

        const target = this.dataset.tab;

        // Remove active from tabs
        document.querySelectorAll('.news-tab').forEach(item => {
            item.classList.remove('active');
        });

        // Hide all content
        document.querySelectorAll('.news-tab-content').forEach(item => {
            item.classList.remove('active');
        });

        // Activate selected tab
        this.classList.add('active');
        document.getElementById(target).classList.add('active');

    });

});
</script>
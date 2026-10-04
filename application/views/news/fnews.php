                        <!-- <div class="l-callback__col col col--md-6 ui-dark ui-background mr-0 ml-auto px-layout py-layout js-form-content">
                            <div class="l-callback__tablist" role="tablist" aria-labelledby="application">
                                <a class="btn btn--outline btn--clone btn--md btn--text-small is-active"
                                    data-plugin=" button" data-button-clone-content="true"
                                    aria-controls="application" aria-selected="true" tabindex="0" role="tab">
                                    <span class="btn__content">
                                        <span class="btn__text">Enquiry request</span>
                                    </span>
                                </a>
                                <a class="btn btn--outline btn--clone btn--md btn--text-small"
                                    data-plugin="button" data-button-clone-content="true" aria-controls="call"
                                    aria-selected="false" tabindex="0" role="tab">
                                    <span class="btn__content">
                                        <span class="btn__text">Book a site Visit</span>
                                    </span>
                                </a>
                            </div>
                            <div class="tabs-contents">
                                <div class="tabs-contents__content ui-background js-tab" id="application" role="tabpanel" aria-hidden="false">
                                  abc
                                </div>
                                <div class="tabs-contents__content ui-background js-tab" id="call" role="tabpanel" aria-hidden="true">
                                    def
                                </div>
                            </div>
                        </div> -->


<div class="news-tabs">

    <!-- Tab Navigation -->
    <div class="news-tabs__nav">
        <button class="news-tab active" data-tab="in-the-news">
            In The News
        </button>

        <button class="news-tab" data-tab="press-release">
            Press Release
        </button>
    </div>


    <!-- Tab Content -->
    <div class="news-tabs__content">

        <!-- In The News -->
        <div class="news-tab-content active" id="in-the-news">
            <div class="row">
                
                <!-- News cards -->
                <div class="col-lg-4">
                    <div class="news-card">
                        <h3>Featured News Title</h3>
                    </div>
                </div>

            </div>
        </div>


        <!-- Press Release -->
        <div class="news-tab-content" id="press-release">
            <div class="row">

                <!-- Press release cards -->
                <div class="col-lg-4">
                    <div class="news-card">
                        <h3>Press Release Title</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
<style>
.news-tabs__nav {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 40px;
}

.news-tab {
    border: 1px solid #ddd;
    background: transparent;
    padding: 12px 30px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.news-tab.active {
    background: #111;
    color: #fff;
    border-color: #111;
}

.news-tab-content {
    display: none;
}

.news-tab-content.active {
    display: block;
}
</style>
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
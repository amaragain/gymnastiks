
Promise.all([
    countView(),
    fetchPopularPosts(),
    fetchRecentPosts(),
    fetchTagCloud()
])


// Update View
function countView() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                'prg/update_view.php',
                {
                    post_id: '<?php echo $title_id;?>'
                },
                function (data) {
                    console.log(data)
                    resolve(data)
                }
            )
        }, 7000);
    })
}

// Fetch Popular Posts
function fetchPopularPosts() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                'prg/fetch_posts.php',
                {
                    current_post_id: '<?php echo $title_id;?>',
                    filter: 'popular',
                    limit: 6
                },
                function (data) {
                    // console.log(data)
                    const popularPosts = JSON.parse(data)
                    let popularPostsHtml = '';
                    popularPosts.filter(post => {
                        popularPostsHtml += `
                            <a href="${post['title_id']}">
                                <div class="article">
                                    <img src="${post['banner']}" alt="" class="img-responsive">
                                    <h3>${post['title']}</h3>
                                </div>
                            </a>`
                    })
                    $('.popular-article-box').html(popularPostsHtml);
                    resolve()
                }
            )
        }, 5000);
    })
}

// Fetch Recent Posts
function fetchRecentPosts() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                'prg/fetch_posts.php',
                {
                    current_post_id: '<?php echo $title_id;?>',
                    filter: 'recent',
                    limit: 6
                },
                function (data) {
                    // console.log(data)
                    const recentPosts = JSON.parse(data)
                    let recentPostsHtml = '';
                    recentPosts.filter(post => {
                        recentPostsHtml += `
                            <a href="${post['title_id']}">
                                <div class="col-md-4">
                                    <section>
                                        <div class="article">
                                            <img src="${post['banner']}" alt="" class="img-responsive">
                                            <h3>${post['title']}</h3>
                                        </div>
                                    </section>
                                </div>
                            </a>`
                    })
                    $('.recent-article-box').html(recentPostsHtml)
                    resolve()
                }
            )
        }, 8000);
    })
}


// Fetch Tag Cloud
function fetchTagCloud() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                'prg/fetch_tagcloud.php',
                {
                    filter: 'tagcloud',
                    limit: 50
                },
                function (data) {
                    const tagCloud = JSON.parse(data)
                    console.log(tagCloud)

                    let tagCloudhtml = '';
                    Object.keys(tagCloud).forEach(function (tag) {
                        let size = `style="font-size: ${(1.2 * ((tagCloud[tag] / 2) + 0.5)) + .5}rem"`;  // Adjust font-size based on the count of each tags
                        tagCloudhtml += `
                            <a ${size} href="?tagId=${tag}">
                                <span>${tag}</span>
                            </a>`
                    })

                    $('.tag-cloud-box').html(tagCloudhtml)
                    resolve()
                }
            )
        }, 1000);
    })
}








// Code for copy-to-clipboard
// let temp = '<input type="text" value="OK">';
// let url = location.href;
// $('.share-url').on('click', function() {
//     $("body").append(temp);
//     temp.val(url).select();
//     document.execCommand("copy");
//     temp.remove();
//     console.log("URL copied!");
// })

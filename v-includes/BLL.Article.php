<?php
	include 'class.DAL.php';
	
	class BLL_Article
	{
		private $manage_content;
		
		function __construct()
		{
			$this->manage_content = new ManageContent_DAL;
			return $this->manage_content;
		}
		
		function getAuthor_sidebar()
		{
			$authors = $this->manage_content->getValue_distinct('article_info','article_author');
			echo '<div class="auth_info"><h4>TODO</h4><ul>';
			foreach($authors as $author)
			{
				echo '<li><a href="article_by_auth.php?author='.$author['article_author'].'">'.$author['article_author'].'</a></li>';
			}
			echo '</ul></div>';
		}
		
		function getArticles()
		{
			$articles = $this->manage_content->getValue_latest('article_info','*');
			foreach($articles as $article)
			{
				echo '<!--article_container starts here-->
            	<div class="article_container">
                	<div class="article_header">'.$article['article_title'].'</div>
                    <div class="article_auth">Por:'.$article['article_author'].'</div>
                    <div class="article_brief">'.$article['article_brief'].'</div>
                    <div class="article_more"><a href="article_full.php?article_no='.$article['id'].'">Leer mas »</a></div>
                </div><!--#article container ends here-->';
			}
		}
		
		function getArticles_byAuthor($author)
		{
			$articles = $this->manage_content->getValue_latest_where('article_info','*','article_author',$author);
			foreach($articles as $article)
			{
				echo '<!--article_container starts here-->
            	<div class="article_container">
                	<div class="article_header">'.$article['article_title'].'</div>
                    <div class="article_auth">Por:'.$article['article_author'].'</div>
                    <div class="article_brief">'.$article['article_brief'].'</div>
                    <div class="article_more"><a href="article_full.php?article_no='.$article['id'].'">Leer mas »</a></div>
                </div><!--#article container ends here-->';
			}
		}
		
		function getFullArticle($id)
		{
			$article = $this->manage_content->getValue_where('article_info','*','id',$id);
			echo '<h1>'.$article[0]['article_title'].'</h1>
                <!--article_container starts here-->
                <div class="article_full">
                <!--get article flong description-->';
			echo '<div class="article_header">'.$article[0]['article_author'].'</div><br/><br/><br/>
                    <div class="article_auth">'.$article[0]['article_description'].'</div>';
			echo '</div><!--#article container ends here-->' ;
		}
	}
?>
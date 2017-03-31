<?php

class Blog extends Controller {

    public function init() {
        $this->loadModel('blog');
        $this->layout = $this->loadView('_templates/layout');
    }

    public function index() {
        if (!empty($_POST)) {
            $data = $_POST;
            
            //validation
            if (empty($data['author'])) {
                $result['validation_errors']['author'] = 'Введите Ваше имя';
            }

            if (empty($data['text'])) {
                $result['validation_errors']['text'] = 'Введите текст записи';
            }

            if (empty($result['validation_errors'])) {
                if ($this->blog_model->addPost($data)) {
                    $result['action_result'] = array('result' => 'success', 'data' => 'Запись успешно добавлена!');
                } else {
                    $result['action_result'] = array('result' => 'danger', 'data' => 'Ошибка при отправке записи');
                }
            } else {
                $result['action_result'] = array('result' => 'danger', 'data' => '<strong>Поля заполнены некорректно:</strong><br/>' . implode($result['validation_errors'], '<br/>'));
                $result['post'] = $_POST;
            }
        }

        $this->loadHelper('text');
        
        $result['top_posts'] = $this->blog_model->getTopPosts(5);
        $result['all_posts'] = $this->blog_model->getAllPosts($sort, $direction);

        $view = $this->loadView('blog/view');
        $this->layout->render(array('content' => $view->fetch($result)));
    }

    public function post($id) {
        
        $this->loadModel('comments');
        
        if (!empty($_POST)) {
            $data = $_POST;
            $data['post_id'] = $id;
            
            //validation
            if (empty($data['author'])) {
                $result['validation_errors']['author'] = 'Введите Ваше имя';
            }

            if (empty($data['text'])) {
                $result['validation_errors']['text'] = 'Введите текст комментария';
            }

            if (empty($result['validation_errors'])) {
                if ($this->comments_model->addComment($data)) {
                    $result['action_result'] = array('result' => 'success', 'data' => 'Комментарий добавлен!');
                } else {
                    $result['action_result'] = array('result' => 'danger', 'data' => 'Ошибка при отправке комментария');
                }
            } else {
                $result['action_result'] = array('result' => 'danger', 'data' => '<strong>Поля заполнены некорректно:</strong><br/>' . implode($result['validation_errors'], '<br/>'));
                $result['post'] = $_POST;
            }
        }
        
        $result['blog_post'] = $this->blog_model->getPost($id);
        $result['comments'] = $this->comments_model->getComments($id);

        $view = $this->loadView('blog/post');
        $this->layout->render(array('content' => $view->fetch($result)));
    }

}

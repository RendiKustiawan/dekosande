public function profile()
  {
    $content['main_view'] = 'ProfileView';
    $content['title'] = "Profile " . $this->session->userdata('nama');
    $this->load->view('Body', $content);
  }
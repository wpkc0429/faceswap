<?php
// Colab笔记本的共享链接
$colabLink = 'https://colab.research.google.com/drive/...';  // 替换为您的Colab笔记本链接

// 构建Colab API的URL
$apiUrl = 'https://colab.research.google.com';
$apiUrl .= '/api/execute';
$apiUrl .= '?file=' . urlencode($colabLink);

// 发送HTTP请求
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// 输出API响应
echo $response;
?>

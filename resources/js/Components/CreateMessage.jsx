import React, { useState, useRef, useEffect } from 'react';
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/inertia-react';
import PrimaryButton from './PrimaryButton';
import 'trix';
import 'trix/dist/trix.css';
import Wysiwyg from './Wysiwyg';
import { Editor } from '@tinymce/tinymce-react';
import axios from 'axios';



const CreateMessage = () => {
    const [content, setContent] = useState('');
    const [message, setMessage] = useState('');

    const editorRef = useRef(null);

    useEffect(() => {
      fetchMessages();
    }, []);
  
    const fetchMessages = async () => {
      try {
        const response = await axios.get('/messages/1');
        setMessage(response.data);
      } catch (error) {
        console.error(error);
      }
    };
     
    const handleSubmit = (e) => {
        e.preventDefault();

        if (editorRef.current) {
          Inertia.put('/messages/1', { content: editorRef.current.getContent() });
          setMessage({
            content: editorRef.current.getContent(),
          });
        }
    
      };
  
      const handleContentChange = (e) => {     
        setContent(e.target.value);
      };
  
  
    return (
      <>
      <Editor
        apiKey='lbxuyoddmo4l5so960gxhp2rgddrd7p48e95k1g770r6xu1o'
        onInit={(evt, editor) => editorRef.current = editor}
        initialValue={ message ? message.content : `<p>This is the initial content of the editor.</p>` }
        init={{
          height: 200,
          menubar: false,
          plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
          ],
          toolbar: 'undo redo | blocks | ' +
            'bold italic forecolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
          content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        }}
      />
      <PrimaryButton className='mt-4' onClick={handleSubmit}>Guardar Mensaje</PrimaryButton>

      </>
      
    );
  };

export default CreateMessage;

<script setup>

import Underline from '@tiptap/extension-underline'
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'

const props = defineProps({
  modelValue: String,
});

const emit = defineEmits(['update:news'])

const editor = useEditor({
  content: props.modelValue,
  onUpdate: ({editor}) => {
    // console.log(editor.getHTML())
    emit('update:modelValue', editor.getHTML())
  },
  extensions: [
    StarterKit, Underline
  ],
  editorProps: {
    attributes: {
      class: 'bg-white block w-full shadow-sm sm:text-sm border-gray-300 min-h-[15rem] max-h-[15rem] overflow-y-auto prose max-w-none',
    },
    transformPastedText(text) {
      return text.toUpperCase()
    }
  },
})

</script>

<template>

  <section
  v-if="editor"
   class="button bg-white block w-full shadow-sm sm:text-sm flex items-center flex-wrap gap-x-2 border border-gray-300 p-2"
  > 
    <button type="button" @click="editor.chain().focus().toggleBold().run()"
    :disabled="!editor.can().chain().focus().toggleBold().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('bold') }"
    class="p-1 border border-black rounded"
    >
      bold
    </button>

    <button type="button" @click="editor.chain().focus().toggleItalic().run()"
    :disabled="!editor.can().chain().focus().toggleItalic().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('italic') }"
    class="p-1 border border-black rounded"
    >
      italic
    </button>

    <button type="button" @click="editor.chain().focus().toggleUnderline().run()"
    :disabled="!editor.can().chain().focus().toggleUnderline().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('underline') }"
    class="p-1 border border-black rounded"
    >
      underline
    </button>

    <button type="button" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('heading', { level: 1 }) }"
    class="p-1 border border-black rounded">
      h1
    </button>

    <button type="button" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('heading', { level: 2 }) }"
    class="p-1 border border-black rounded">
      h2
    </button>

    <button type="button" @click="editor.chain().focus().toggleBulletList().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('bulletList') }"
    class="p-1 border border-black rounded">
      bullet list
    </button>

    <button type="button" @click="editor.chain().focus().toggleOrderedList().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('orderedList') }"
    class="p-1 border border-black rounded">
      ordered list
    </button>

    <button type="button" @click="editor.chain().focus().toggleCodeBlock().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('codeBlock') }"
    class="p-1 border border-black rounded">
      code block
    </button>

    <button type="button" @click="editor.chain().focus().toggleBlockquote().run()"
    :class="{ 'bg-black text-white rounded': editor.isActive('blockquote') }"
    class="p-1 border border-black rounded">
      blockquote
    </button>

    <button type="button" @click="editor.chain().focus().undo().run()"
    :disabled="!editor.can().chain().focus().undo().run()"
    class="p-1 border border-black rounded">
      undo
    </button>
              
    <button type="button" @click="editor.chain().focus().redo().run()"
    :disabled="!editor.can().chain().focus().redo().run()"
    class="p-1 border border-black rounded">
      redo
    </button>


  </section>
  <EditorContent :editor="editor"/>

</template>

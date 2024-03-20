import React, { useEffect, useState } from 'react'

const Exam01 = ({ exam }) => {
  const [currentPage, setCurrentPage] = useState(1)
  const questionsPerPage = 10

  // Define sections in state
  const [sections, setSections] = useState([
    {
      title: 'What is Your Shit',
      description: 'This is section 1',
      questions: exam.questions.slice(0, 5),
      class: "grid grid-cols-2"
    },
    {
      title: 'Section 2',
      description: 'This is section 2',
      questions: exam.questions.slice(5, 10),
      class: "grid grid-cols-2"
    },
    {
      title: 'Section 3',
      description: 'Section 3',
      questions: exam.questions.slice(10, 16),
      class: "grid grid-cols-3"
    },
    // Add more sections as needed
  ])

  useEffect(() => {
    console.log(exam)
  }, [exam])

  const paginate = (pageNumber) => setCurrentPage(pageNumber)

  return (
    <div className="p-6 bg-white rounded shadow">
      <h1 className="text-2xl font-bold mb-4">{exam.name}</h1>

      {sections.map((section, index) => (
        <>
          <h2 className="text-xl font-bold mb-2">{section.title}</h2>
          <p className="text-lg font-bold mb-4">{section.description}</p>
          <div key={index} className={`mb-4 ${section.class}`}>
            {section.questions.map((question, index) => (
              <div key={index} className="mb-2">
                <p className="mb-2 font-semibold">{question.question_text}</p>

                {question.choices.map((choice, index) => (
                  <div key={index} className="mb-2">
                    <input
                      type="radio"
                      name={`question-${question.id}`}
                      value={choice.id}
                      className="mr-2"
                    />
                    <label>{choice.choice_text}</label>
                  </div>
                ))}
              </div>
            ))}
          </div>
        </>
      ))}

      <div className="pagination">
        {[
          ...Array(Math.ceil(exam.questions.length / questionsPerPage)).keys(),
        ].map((number) => (
          <button key={number} onClick={() => paginate(number + 1)}>
            {number + 1}
          </button>
        ))}
      </div>
    </div>
  )
}

export default Exam01
